<?php
require ("AjaxForm.php") ;
require ("AjaxModel.php") ;
$transaction = $_POST["transaction"] ;

function executeTransaction ($transaction) {
	if ($transaction == "insert") {
			insertUser($_POST["register-name"],$_POST["register-user"],$_POST["register-password"],$_POST["register-telephone"],$_POST["register-mail"]);
			showFormRegister () ;
		}
	/*if (!isset($_SESSION)) session_start () ;
	if (!isset($_SESSION['i'])) $_SESSION['i'] = false ;

	if (!$_SESSION['i']) {
		//print "Iniciar session" ;	
		if ($transaction == "register") {
			showFormRegister () ;
		} elseif ($transaction == "login") {
			showFormLogin () ;
		} elseif ($transaction == "insert") {
			insertUser($_POST["register-name"],$_POST["register-user"],$_POST["register-password"],$_POST["register-telephone"],$_POST["register-mail"]);
			showFormRegister () ;
		} elseif ($transaction == "validate-user") {
			validateUser($_POST["login-user"],$_POST["login-password"]);
		}
	} else {
		/*if ($_SESSION['i']) {
			showUSer () ;
		} */
		/*if ($transaction == "register") {
			//showFormRegister () ;
			print "register" ;
		} elseif ($transaction == "login") {
			//showFormLogin () ;
			showUSer () ;
		} elseif ($transaction == "insert") {
			//insertUser($_POST["register-name"],$_POST["register-user"],$_POST["register-password"],$_POST["register-telephone"],$_POST["register-mail"]);
			//showFormRegister () ;
		} elseif ($transaction == "validate-user") {
			//validateUser($_POST["login-user"],$_POST["login-password"]);
		}
	}*/
}

executeTransaction ($transaction) ;