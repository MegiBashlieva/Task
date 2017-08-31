<?php
namespace classes;
use classes\DB;
use classes\User;


 class DateBaseOperations{
	
 	
 	
 	public static function addUserToDB(User $user){
 		
 		try {
 			$pdo = DB::getIstance()->pdo;
 			$sql = $pdo->prepare("INSERT INTO users(first_name, last_name, email,pass)
            VALUES(?,?,?,?)");
 			
 			$sql->execute(array($user->getFirstName(),$user->getLastName(),$user->getEmail(),$user->getPass()));
			$pdo = null;
 		} catch(PDOException $e) {
 			echo $e->getMessage();
 		}
 	}
}
?>