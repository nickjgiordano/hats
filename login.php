<?php
	// start session to store session variables
	session_start();
	
	// if user pressed logout button, then destroy session
	if($_POST['login_btn'] == "logout") {
		session_destroy();
	// otherwise, set login session variable to match username
	} else {
		// get email entered by user
		$user = $_POST['user'];
		
		// get password entered by user
		$pass = $_POST['pass'];
		
		// if username and password both match, set session user and admin variables
		$str = file_get_contents('users.json');
		$json = json_decode($str, true);
		if(isset($json[$user]) ) {
			if($json[$user]['password'] == $pass) {
				$_SESSION['user'] = $user;
				$_SESSION['admin'] = $json[$user]['admin'];
			} else {session_destroy();} // wrong password, so destroy session
		} else {session_destroy();} // wrong username, so destroy session
	}
	
	// redirect user back to previous page
	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>