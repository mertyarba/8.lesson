<?php

	require_once ("../../config.php");
	
	
	function signup($user, $pass){
		
		//hash the password
		$pass = hash("sha512", $pass);
		
		//GLOBALS - access outside variable in function
		$mysql = new mysqli("localhost", $GLOBALS["db_username"], $GLOBALS["db_password"], "webpr2016_mertyarba");
		
		$stmt = $mysql->prepare("INSERT INTO users (username, password) VALUES (?,?)");
		
		echo $mysql->error;
		
		$stmt->bind_param("ss", $user, $pass);
		
		if($stmt->execute()){
			echo "user saved successfully! ";
		}else{
			echo $stmt->error;
		}
	}


?>