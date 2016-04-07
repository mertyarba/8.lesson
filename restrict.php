<?php
	
	//we need functions for dealing with session
	require_once("functions.php");
	
	if(!isset($_SESSION["user_id"])){
		//redirect not logged in user to the login page
		header("Location: login.php");
		
	}


	//?Logout is in the URL
	if(isset($_GET["logout"])){
		
		//delete the session
		session_destroy();
		
		header("Location: login.php");
	}

?>

<a href="?Logout=1" >Log Out</a>