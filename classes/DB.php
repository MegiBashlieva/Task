<?php
namespace classes;

use \PDO;
class DB{
	
	private static $instance;
	
	private $dsn = 'mysql:dbname=task;host=localhost';
	private $userName = "root";
	private $pass = "";
	
	public $pdo;
	
	private function __construct(){
		
		$this->connect();
	}
	
	public static function getIstance(){
		
		if(!isset(self::$instance)){
				self::$instance = new DB();
		}
		return self::$instance;
	}
	
	private function connect(){
		
		try {
			$this->pdo = new PDO($this->dsn, $this->userName, $this->pass);
			
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		} catch (PDOException $e) {
			echo 'Connection failed: ' . $e->getMessage();
		}
	}
	
}

?>