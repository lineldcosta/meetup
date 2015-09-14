<?php

Interface first_name{
public function getFirstName();
}

Interface last_name{
public function geLastName();
}

Interface email{
public function email();
}

Interface password{
public function password();
}

Class User implements first_name,last_name,email,password {

	public $first_name;
	public $last_name;
	public $email;
	public $password;
	public function __construct($firstName, $lastName, $email, $password){

		$this->first_name = $firstName;
		$this->last_name = $lastName;
		$this->email	= $email;
		$this->password	= $password;
	}
	public function getFirstName(){
		return $this->first_name;
	}
	public function geLastName(){
		return $this->last_name;
	}
	public function email(){
		return $this->first_name;
	}
	public function password(){
		return $this->password;
	}
}


Class UserDetails {
	
	public function __consturct(User $userInterface){
		$this->user = $userInterface;
	}
	
	public function getFullName(){
		return $this->user->getFirstName().' '.$this->user->getLastName();
	}
	
}


