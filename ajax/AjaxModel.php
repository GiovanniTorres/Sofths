<?php 
//require ("AjaxForm.php") ;
require "../controllers/UserController.php" ;
require "../controllers/SessionController.php" ;
require "../models/UserModel.php" ;

function insertUser($name,$user,$password,$telephone,$mail){
	$user_data = array (
		"mail" => $mail,
		"name" => $name,
		"user" => $user,
		"password" => $password,
		"telephone" => $telephone,
	);

		$new_user_set = new UserController () ;
		$new_user_set->setUsers($user_data) ;
}

function validateUser ($user,$password) {
	$login_session = new SessionController () ;
	$session = $login_session->login($user, $password) ;
	if (empty($session)) {
		showFormLogin () ; 
		print "<div class='text-light text_user_not_exist'>El usuario no existe</div>" ;
	} else {
		$_SESSION['i'] = true ;
		chargerUser ($session) ;
	}
}

function chargerUser ($session) {
	
		//if (!isset($_SESSION)) session_start () ;
		foreach ($session as $row) {
					$_SESSION['mail'] = $row['mail'] ;
					$_SESSION['name'] = $row['name'] ;
					$_SESSION['user'] = $row['user'] ;
					$_SESSION['password'] = $row['password'] ;
					$_SESSION['telephone'] = $row['telephone'] ;
				}
				showUser () ;
}

function showUSer () {
	print "Usuario: ".$_SESSION['user'] ;
}