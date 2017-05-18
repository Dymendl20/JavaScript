<?php
    if (isset($_POST["prenom"]))
        setcookie("prenom", $_POST, time()+24*3600, null, null, false, true);
    if (isset($_POST["nom"]))
        setcookie("nom", $_POST, time()+24*2600, null, null, false, true);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Traitement des données envoyées par formulaire</title>
    </head>
    <body>
        Les cookies nom et prenom ont été mémorisés.<br><br>
        <a href="verif_cookies.php">Cliquez ici pour le vérifier</a>
    </body>
</html>