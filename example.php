nterface first_name{
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
		return $this->getFirstName.' '.$this->getLastName;
	}
	
}


