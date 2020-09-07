<?php
class UserController {
	private $usermodel ;

	public function __construct () {
		$this->usermodel = new UserModel () ;
	}

	public function getUsers ($user = "") {
		return $this->usermodel->get ($user = "") ;
	}

	public function setUsers ($user_data) {
		return $this->usermodel->set ($user_data) ;
	}

	public function __destruct () {

	}
}