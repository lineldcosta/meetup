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
	/**
	  * Method to get the firstName
	  *
	  * @author lionel
	  * @since 14 sep 2015
	  * @version 1.0
	  * @return boolean
	  */
	public function getFirstName(){
		return $this->first_name;
	}
	/**
	  * Method to get the lastName
	  *
	  * @author lionel
	  * @since 14 sep 2015
	  * @version 1.0
	  * @return boolean
	  */
	public function geLastName(){
		return $this->last_name;
	}
	
	/**
	  * Method to get the email
	  *
	  * @author lionel
	  * @since 14 sep 2015
	  * @version 1.0
	  * @return boolean
	  */
	public function email(){
		return $this->email;
	}
	/**
	  * Method to get the password
	  *
	  * @author lionel
	  * @since 14 sep 2015
	  * @version 1.0
	  * @return boolean
	  */
	public function password(){
		return $this->password;
	}
}


Class UserDetails {
	
	public function __consturct(User $userInterface){
		$this->user = $userInterface;
	}
	/**
	  * Method to get the fullname
	  *
	  * @author lionel
	  * @since 14 sep 2015
	  * @version 1.0
	  * @return boolean
	  */
	public function getFullName(){
		return $this->user->getFirstName().' '.$this->user->getLastName();
	}
	
}


