<?php
require_once 'outload.php';

use classes\User;
use classes\DataBaseOperations;

$user = isset($_POST["userJson"])? $_POST["userJson"]: "";

$user= json_decode($user);

if($user){
$userDB = new User($user->firstName,
		$user->lastName,
		$user->email,
		$user->pass
		);

$result = DataBaseOperations::addUserToDB($userDB);

echo json_encode($result);
}


