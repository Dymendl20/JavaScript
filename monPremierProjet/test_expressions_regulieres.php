<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Tp php</title>
    </head>
    <body>
        <?php
        $email = "nom.prenom@fai.com";
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,1\.[a-z]{2,4}$#", $email))
            echo "l'adresse e-mail est valide.";
        else
            echo "L'adresse e-mail n'est pas valide.";
        ?>

    </body>
</html>