<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Tp php</title>
</head>
<body>
<?php
$uneDate = "12/08/2017";
sscanf($uneDate, "%d/%d/%d", $jour, $mois, $annee);
echo "Jour : ".$jour.", Mois : ".$mois.", Année : ".$annee;
?>

</body>
</html>