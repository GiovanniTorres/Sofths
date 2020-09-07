<?php

$user_data = array (
	'new_firstname' => $_POST['new_firstname'],
	'new_user' 		=> $_POST['new_user'],
	'new_password' 	=> $_POST['new_password'],
	'new_telephone' => $_POST['new_telephone'],
	'new_mail' 		=> $_POST['new_mail']
) ;

$usercontroller = new UserController () ;
$usercontroller->setUser($user_data) ;