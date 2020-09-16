<?php
	// start session to get session variables
	session_start();
	
	// check if user has admin privileges
	if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
		
		// convert existing json file to string to append to it
		$str = file_get_contents('catalogue.json');
		$json = json_decode($str, true);
		
		// get user-entered data and add to json string
		$json [$_POST['id'] ] = array(
				'product' => $_POST['product'],
				'description' => $_POST['description'],
				'price' => $_POST['price'],
				'image' => "placeholder.png"
		);
		$json = json_encode($json);
		
		// save json string to replace old file
		file_put_contents('catalogue.json', $json);
	}
	// redirect back to homepage
	header('Location: catalogue.php');
?>