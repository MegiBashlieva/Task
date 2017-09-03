<?php
require_once 'outload.php';
use classes\DataBaseOperations;
session_start();

$id = isset($_POST["id"])? $_POST["id"]:"";

if($id){
	
	DataBaseOperations::deleteUser($id);
}
