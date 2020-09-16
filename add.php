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
		<title>Add new item | Notorious Hat House | fresh New Era hats at discount prices!</title>
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
						echo '<h1>Add new item</h1>' .
						// form for submitting new data
						'<form action="insert.php" method="post" id="add" name="add">' .
						'<input type="text" name="id" value="" placeholder="id" required autofocus />' .
						'<input type="text" name="product" value="" placeholder="product name" required />' .
						'<input type="text" name="description" value="" placeholder="description" required />' .
						'<input type="text" name="price" value="" placeholder="price (£)" required /><br />' .
						'<input type="reset" value="Reset form" />' .
						'<input type="submit" value="Submit new item" />' .
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