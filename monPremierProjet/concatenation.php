<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon premier projet en PHP</title>
</head>
<body>
	<?php
		$milieu = "font";
		$fin = 15;
		echo "Trois fois cinq $milieu $fin<br>";
		echo 'Trois fois cinq $milieu $fin<br>';
		echo 'Trois fois cinq '.$milieu.''.$fin.'<br>';
	?>
</body>
</html>