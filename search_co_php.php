<?php

ob_start();
	session_start();
	require_once 'dbconnect.php';
	include "sqlconnec.php";
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['username']) ) {
		header("Location: login_co.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users_co WHERE userId=".$_SESSION['username']);
	$userRow=mysqli_fetch_array($res);	
	
	$search = $_SESSION['search_1'];

	$result = mysqli_query($conn,"SELECT * FROM temp_users WHERE userEmail='".$search."'");
	$rows = mysqli_fetch_array($result);
	
	date_default_timezone_set('Asia/Kolkata');
	$temp=$rows['userId'];
	$date = date('m/d/Y');
	$time = date('h:i:s a');
	$name=$rows['userName'];
	$email=$rows['userEmail'];
	$pass=$rows['userPass'];
	$enum=$rows['enum'];
	
	
try
{
	
	
	mysqli_query($conn,"INSERT into users (userId,userName,enum,userEmail,userPass,date,time) VALUES('".$temp."','".$name."','".$enum."','".$email."','".$pass."','".$date."','".$time."')");
	header("Location: home_co.php");
}
catch(Exception $e) {
 echo 'Message: ' .$e->getMessage();
 }
?>