<?php
namespace classes;

class User
{
	private $firstName;
	private $lastName;
	private $email;
	private $pass;
	
	
	
	public function __construct($firstName, $lastName, $email, $pass ){
		
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
		$this->setEmail($email);
		$this->setPass($pass);
	}
	
	public function setFirstName($value)
	{
		$this->firstName = $value;
	}
	
	public function getFirstName()
	{

		return $this->firstName;
	}
	
	public function setLastName($value)
	{
		$this->lastName = $value;
	}
	
	public function getLastName()
	{
	
		return $this->lastName;
	}
	
	public function setEmail($value)
	{
		$this->email = $value;
	}
	
	public function getEmail()
	{
	
		return $this->email;
	}
	
	public function setPass($value)
	{
		$this->pass = $value;
	}
	
	public function getPass()
	{
	
		return $this->pass;
	}
}