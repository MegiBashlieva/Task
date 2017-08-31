<?php
require_once 'outload.php';

use classes\User;
use classes\DateBaseOperations;

$user = isset($_POST["userJson"])? $_POST["userJson"]: "";

if($user){
	
	$user= json_decode($user);
	
	$userDB = new User($user->firstName,
					   $user->lastName,
					   $user->email,
					   $user->pass
					  );
	DateBaseOperations::addUserToDB($userDB);
	
	echo json_encode(true);
}else
{
	echo json_decode(false);
}



