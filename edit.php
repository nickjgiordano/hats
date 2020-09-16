<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="New Era baseball cap catalogue">
		<meta name="keywords" content="hats,caps,headwear,baseball,basketball,football,hockey,soccer,sports,MLB,NBA,NFL,NHL,EPL,UCL">
		<meta name="author" content="Nick Giordano">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
		<title>Edit item | Notorious Hat House | fresh New Era hats at discount prices!</title>
	</head>
	<body onload="setFont()">
		<?php require_once('menu.php'); ?>
		<section class="main">
			<div class="content">
<!----------------------------------------------------------------------------------------------------------
************************************************************************************************************

	UNIQUE CONTENT STARTS HERE

************************************************************************************************************
----------------------------------------------------------------------------------------------------------->
				<?php
					// check if user has admin privileges
					if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
						echo '<h1>Edit item</h1>';
						
						// get json file and get key of item to be edited
						$str = file_get_contents('catalogue.json');
						$json = json_decode($str, true);
						$key = $_GET['key'];
						
						// form for submitting data, prepopulated with item contents
						echo '<form action="update.php" method="post" id="edit" name="edit">' .
						// post id through form as a hidden field, to prevent it from being edited
						'<input type="hidden" name="id" value="'.$key.'" />' .
						'<input type="text" name="product" value="'.$json[$key]['product'].'" placeholder="product name" required autofocus />' .
						'<input type="text" name="description" value="'.$json[$key]['description'].'" placeholder="description" required />' .
						'<input type="text" name="price" value="'.$json[$key]['price'].'" placeholder="price (£)" required /><br />' .
						'<input type="reset" value="Reset form" />' .
						'<input type="submit" value="Submit edited item" />' .
						'</form>' .
						'<form action="catalogue.php" method="" id="cancel" name="cancel">' .
						'<input type="submit" value="Cancel" />' .
						'</form>';
					// otherwise redirect back to catalogue
					} else {header('Location: catalogue.php');}
				?>
<!----------------------------------------------------------------------------------------------------------
************************************************************************************************************

	UNIQUE CONTENT ENDS HERE

************************************************************************************************************
----------------------------------------------------------------------------------------------------------->
			</div>
			<div class="side"><?php require_once('audio.php'); ?></div>
			<div class="side"><?php require_once('currency.php'); ?></div>
		</section>
	</body>
</html>