<?php
require_once 'outload.php';
use classes\DataBaseOperations;
session_start();

$currentId = $_SESSION["user"]["user_id"];

$users = DataBaseOperations::getUsers($currentId);

echo json_encode($users);