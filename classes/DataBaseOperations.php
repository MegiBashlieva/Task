<?php
namespace classes;
use classes\DB;
use classes\User;


 class DataBaseOperations{
	
 	
 	
 	public static function addUserToDB(User $user){
 		
 		$email = $user->getEmail();
 		$checkUser = DataBaseOperations::checkUserExist($email);
 		//var_dump($checkUser);
 		if($checkUser){
 			
 			return false;
 			
 		}
 		
 		try {
 			$pdo = DB::getIstance()->pdo;
 			$sql = $pdo->prepare("INSERT INTO users(first_name, last_name, email,pass)
            VALUES(?,?,?,?)");
 			
 			$sql->execute(array($user->getFirstName(),$user->getLastName(),$user->getEmail(),$user->getPass()));
			$pdo = null;
			return true;
			
 		} catch(PDOException $e) {
 			echo $e->getMessage();
 		}
 	}
 	
 	public static function logInUser( $email, $pass){
 		
 		$checkUser = DataBaseOperations::checkUserExist($email);
 		
 		if(!$checkUser){
 			
 			return "Hmm, we don't recognize that email. Please try again.";
 		}
 		
 		try {
 			$pdo = DB::getIstance()->pdo;
 		$sql = $pdo->prepare("Select id,first_name FROM users WHERE pass = :pass and email = :email");
 		$sql->execute(array(':pass' => $pass,
 									':email'=>$email));
 		$result = $sql->fetch();
 		$pdo = null;
 		} catch(PDOException $e) {
 			echo $e->getMessage();
 		}
 		return $result;  // if result 0 wrong pass
 	}
 	
 	private function checkUserExist($email){
 		
 		try {
 			$pdo = DB::getIstance()->pdo;
 			$sql = $pdo->prepare("Select id FROM users WHERE email = :email");
 			$sql->execute(array(':email'=>$email));
 			$result = $sql->fetch();
 			$pdo = null;
 		} catch(PDOException $e) {
 			echo $e->getMessage();
 		}
 		
 		return $result;
 		
 		
 	}
 	
 	public static function getUsers($currentUserId){

 		try {
 			$pdo = DB::getIstance()->pdo;
 			$sql = $pdo->prepare("Select first_name,last_name,id FROM users WHERE id != :id");
 			$sql->execute(array(':id'=>$currentUserId));
 			$result = $sql->fetchAll();
 			$pdo = null;
 		} catch(PDOException $e) {
 			echo $e->getMessage();
 		}
 			
 		return $result;
 		
 	}
 	
 	public static function deleteUser($userId){ 
 		
 		try {
 			$pdo = DB::getIstance()->pdo;
 			$sql = $pdo->prepare("DELETE FROM users WHERE id = :id");
 			$sql->execute(array(':id'=>$userId));
 			
 			$pdo = null;
 		} catch(PDOException $e) {
 			echo $e->getMessage();
 		}
 		
 		return $result;
 	}
}
?>