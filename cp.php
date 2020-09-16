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
		<title>User control panel | Notorious Hat House | fresh New Era hats at discount prices!</title>
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
					// check if user is logged in before displaying control panel
					if( isset($_SESSION['user']) ) {
						echo '<h1>User control panel</h1>' .
						'<p>From here, you can change the font size of the header:</p>' .
						'<select id="font" name="font" onchange="changeFont(this)">' .
						'<option selected></option>' .
						'<option value="small">Small</option>' .
						'<option value="medium">Medium</option>' .
						'<option value="large">Large</option>' .
						'</select>';
					// otherwise redirect back to homepage
					} else {header('Location: index.php');}
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