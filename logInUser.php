<?php
require_once 'outload.php';
use classes\DataBaseOperations;
session_start();

$email = isset($_POST["emailSignIn"])? $_POST["emailSignIn"]: "";
$pass = isset($_POST["passwordSignIn"])? $_POST["passwordSignIn"]: "";



$result = DataBaseOperations::logInUser($email, $pass);

if(is_array($result)) {
	
	$user = array("first_name" => $result["first_name"],
								"user_id" => $result["id"]);
	$_SESSION['user'] = $user;

	 
	
	header("location: secondPage.php");
}else {
	
	if(empty($result)){	
	
		$_SESSION['message'] = 'Incorrect password ';
	}else{
		$_SESSION['message'] = $result;
	}
	
	
	header("location: index.php");
}