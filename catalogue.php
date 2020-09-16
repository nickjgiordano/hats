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
		<title>Product catalogue | Notorious Hat House | fresh New Era hats at discount prices!</title>
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
				<h1>Product catalogue</h1>
				<div class="catalogue">
					<?php
						// get catalogue contents and display in table
						$str = file_get_contents('catalogue.json');
						$json = json_decode($str, true);
						foreach($json as $key => $value) {
							// append item's key to hyperlink url
							echo '<a href="item.php?key='.$key.'">'.
							'<div><img src="catalogue/'.$value['image'].'">' .
							'<span style="font-weight: bold">' .
							$value['product'].'</span><br /><span>£' .
							number_format( (float)$value['price'], 2, '.', '' ) .
							'</span></div></a>';
						}
						echo '</div>';
						// check if user has admin privileges to potentially display 'add' button
						if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
							echo '<a href="add.php"><div class="edit">add new item</div></a>';
						}
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