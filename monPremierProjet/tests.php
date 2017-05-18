<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Mon premier en PHP</title>
	</head>
	<body>
		<?php
			if ($a == 12) {
			//Si la $a vaut 12 Une ou plusieurs instructions exécutées si $a vaut 12
			}
			if ($a == 12) {
			//Une ou plusieurs instructions exécutées si $a vaut 12
			}
			elseif ($a==13) {
			//Une ou plusieurs instructions exécutées si $a vaut 13
			}
			else {
			//Une ou plusieurs instructions exécutées si $a ne vaut ni 12 ni 13
			}
			if ($a == 12) {
				//Une ou plusieurs instructions exécutées si $a vaut 12
			}
			else {
				//Une ou plusieurs instructions exécutées si $a est différent de 12
			}
			switch ($i) {
				case 0:
					echo "i vaut 0";
					break;
				
				case 1:
					echo "i vaut 1";
					break;
				case 2:
					echo "i vaut 2";
					break;
				}

				if ($a == 15) 
					$b = "$a est égal a 15";
					else
						$b = "$a est différent de 15";
						$b = ($a == 15) ? "$a est égal à 15" : "$a est différent de 15";
				
		?>
	</body>
</html>