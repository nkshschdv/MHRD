<html>
	<head>
		<title>Find my Favorite Movie!</title>
	</head>
	<body>
		<?php
			$myfavmovie=urlencode("Life of Brain");
			echo "<a href='varAccepter.php?favmovie=$myfavmovie'>";
			echo "Click here to see information about my favorite movie!";
			echo "</a>";
		?>
	</body>
</html>