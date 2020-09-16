<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<section class="audio">
			<p>Feel free to listen to our latest recommended Christmas audio piece!</p>
			<audio id="music" onload="audioWidget()">
				<source src="media/amclassical_hark_the_herald_angels_sing.mp3" type="audio/mpeg">
				ERROR: browser doesn't support audio element!
			</audio>
			<button id="play">play</button><button id="pause">pause</button><button id="seek">seek 10</button>
			<p>Check back in the future for more classics!</p>
		</section>
		<script>
			// internal script used just for music player
			// button controls created and used in place of normal html element controls
			var player = $("#music")[0];
			var seek = 0;
			$("#play")[0].onclick = function() {
				player.play();
			};
			$("#pause")[0].onclick = function() {
				player.pause();
			};
			$("#seek")[0].onclick = function() {
				seek += 10;
				player.currentTime = seek;
				player.play();
			};
		</script>
	</body>
</html>