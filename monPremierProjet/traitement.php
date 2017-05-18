<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
        $a = $prenom;
            $prenom = htmlspecialchars($_POST["prenom"]);
            $nom = htmlspecialchars($_POST["nom"]);
            $motDePasse = htmlspecialchars($_POST["mdp"]);
            $age = htmlspecialchars($_POST["age"]);
            $obs = htmlspecialchars($_POST["observations"]);

            echo "<b>Données reçues :</b><br><br>";
            echo "<b>Prénom : $prenom<br>";
            echo "<b>Nom : $nom<br>";
            echo "<b>Mot de passe : $motDePasse<br>";
            echo "<b>Age : $age<br>";
            echo "<b>Observations : $obs<br>";
        ?>
    </body>
</html>