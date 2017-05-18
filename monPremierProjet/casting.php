<?php
	$a = 10;//$a est un entier
	$b = (string) $a;//$b est une chaîne
	$c = "10";
	if ($b === $c)
		echo "\$b et \$c sont du même type<br>";
	if ($a === $b)
		echo "\$a et \$b sont du même type<br>";
	else
		echo "\$a et \$b ne sont pas du même type<br>";
	?>