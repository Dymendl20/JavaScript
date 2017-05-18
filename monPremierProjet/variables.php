<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Premier projet en PHP</title>
	</head>
	<body>
	<?php
		$monTexte = "Ce texte est mémorisé dans la variable \"monTexte\"";
		$valeur_flottante = 13.5;
		$monBooleen = true;
		$monTableau = array('un','deux','trois','quatre','cinq');
		class maClasse{
		}
		$monObjet = new maClasse();

		echo $monTexte."<br>";
		echo $valeur_flottante."<br>";
		echo $monBooleen."<br>";

		echo gettype($monTexte)." ";
		echo gettype($valeur_flottante)." ";
		echo gettype($monBooleen)." ";
		echo gettype($monTableau)." ";
		echo gettype($monObjet)." ";
	?>
	</body>
</html>