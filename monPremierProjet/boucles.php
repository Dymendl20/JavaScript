<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon premier projet en PHP</title>
</head>
<body>
	<?php
		for ($i = 1; $i<10; $i++) {
			echo "&dollar;1 vaut $1<br>";
		}

		$i=0;
		while ($i<10) {
			$i++;
			echo "&dollar;1 vaut ".$i."<br>";
		}
		?>
</body>
</html>