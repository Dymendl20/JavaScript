<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Tp php</title>
</head>
<body>
<?php
$dateEtHeure = "18 March 2017 17:45:38";
sscanf($dateEtHeure, "%d %s %d %d: %d: %d", $jour, $mois, $annee
    , $heures, $minutes, $secondes);
echo "Jour : ".$jour.", Mois : ".$mois.", Année : ".$annee.
    "<br>";
echo "Heures : ".$heures.", Minutes:".$minutes.", Secondes
        : ".$secondes."<br>";
?>

</body>
</html>