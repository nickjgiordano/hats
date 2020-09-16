<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<header>
			<div class="top">
				<div class="left">
					<?php echo date('l jS F Y'); ?>
				</div><div class="logo"><a href="index.php"><img src="media/logo.png"></a></div><div class="right">
					<form action="login.php" method="post" id="login" name="login">
						<?php
							session_start();
							// check if user is logged in to either display logout button and CP link, or login form
							if( isset( $_SESSION['user'] ) )
							{
								echo '<div style="display: inline-block; text-align: right; width: 260px; padding-right: 10px;">logged in as <span style="font-weight: bold;">'.$_SESSION['user'] .
								'</span> [<a href="cp.php" style="color: white;">CP</a>]</div><input type="submit" name="login_btn" value="logout" class="login_btn" />';
							}
							else
							{
								echo '<input type="text" name="user" class="login" placeholder="username" required />' .
								'<input type="password" name="pass" class="login" placeholder="password" required />' .
								'<input type="submit" name="login_btn" value="login" class="login_btn" />';
							}
						?>
					</form>
				</div>
			</div>
		</header>
		<nav>
			<div class="links">
				<a href="index.php"><div>Homepage</div></a>
				<a href="about.php"><div>About us</div></a>
				<a href="catalogue.php"><div>Catalogue</div></a>
				<a href="blog.php"><div>Blog</div></a>
				<a href="contact.php"><div>Contact us</div></a>
			<div>
		</nav>
		<section class="social">
			<a target="_blank" href="http://www.twitter.com"><img src="media/twitter.png"></a><br />
			<a target="_blank" href="http://www.instagram.com"><img src="media/instagram.png"></a><br />
			<a target="_blank" href="http://www.facebook.com"><img src="media/facebook.png"></a><br />
			<a target="_blank" href="http://www.youtube.com"><img src="media/youtube.png"></a><br />
			<a target="_blank" href="http://www.plus.google.com"><img src="media/googleplus.png"></a><br />
			<a target="_blank" href="http://www.linkedin.com"><img src="media/linkedin.png"></a><br />
		</section>
		<footer>
			Copyright © 2018 -- Notorious Hat House -- All rights reserved
		</footer>
	</body>
</html>