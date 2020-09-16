<?php
	// start session to get session variables
	session_start();
	
	// check if user has admin privileges
	if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
		
		// convert existing json file to string to update it
		$str = file_get_contents('catalogue.json');
		$json = json_decode($str, true);
		
		// get user-entered data to update json string
		$key = $_POST['id'];
		$json[$key]['product'] = $_POST['product'];
		$json[$key]['description'] = $_POST['description'];
		$json[$key]['price'] = $_POST['price'];
		$json = json_encode($json);
		
		// save json string to replace old file
		file_put_contents('catalogue.json', $json);
	}
	// redirect back to item page
	header('Location: item.php?key='.$key);
?>