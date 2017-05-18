<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon premier projet en PHP</title>
</head>
<body>
	<?php
		echo "<table border>";
		echo "<tr><th>Nombre</th><th>Carré</th><th>Racine</th></tr>";
		for ($i = 1; $i<11; $i++)
			echo "<tr><td>$i</td><td>".$i*$i."</td><td>".sqrt($i)."</td></tr>";
		echo "</table>";
	?>
</body>
</html>