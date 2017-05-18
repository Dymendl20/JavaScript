<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Entrainement - Mise en forme php</title>
    </head>
    <body>
        <?php
        if (isset($_POST["mdp"]))
            if ($_POST["mdp"] == "champion")
                echo "Vous avez accès au contenu protégé de cette page.";
        else
            echo "Le mot de passe entré n'est pas le bon.
            Réessayer...";
        ?>
    </body>
</html>